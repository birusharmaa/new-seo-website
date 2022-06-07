<?php

namespace App\Libraries;

use App\Controllers\Security_Controller;
use App\Models\Modules;
use App\Models\SubModules;

class Left_menu
{

    private $ci = null;

    public function __construct()
    {
        $this->ci = new Security_Controller(false);
    }

    function get_available_items($type = "default")
    {
        $items_array = $this->_prepare_sidebar_menu_items($type);

        //remove used items
        $default_left_menu_items = $this->_get_left_menu_from_setting($type);

        foreach ($default_left_menu_items as $default_item) {
            unset($items_array[get_array_value($default_item, "name")]);
        }

        //since all menu items will be added to the customization area when there is no item, don't show anything here
        if (!$default_left_menu_items) {
            $items_array = array();
        }

        $items = "";
        foreach ($items_array as $item) {
            $items .= $this->_get_item_data($item, true);
        }

        return $items ? $items : "<span class='text-off empty-area-text'>" . app_lang('no_more_items_available') . "</span>";
    }

    private function _prepare_sidebar_menu_items($type = "", $return_sub_menu_data = false)
    {
        $final_items_array = array();
        $items_array = $this->_get_sidebar_menu_items($type);

        foreach ($items_array as $item) {
            $main_menu_name = get_array_value($item, "name");

            if (isset($item["submenu"])) {
                //first add this menu removing the submenus
                $main_menu = $item;
                unset($main_menu["submenu"]);
                $final_items_array[$main_menu_name] = $main_menu;

                $submenu = get_array_value($item, "submenu");
                foreach ($submenu as $key => $s_menu) {
                    //prepare help items differently
                    if ($main_menu_name == "help_and_support") {
                        $s_menu = $this->_make_customized_sub_menu_for_help_and_support($key, $s_menu);
                    }

                    if ($return_sub_menu_data) {
                        $s_menu["is_sub_menu"] = true;
                    }

                    if (get_array_value($s_menu, "class")) {
                        $final_items_array[get_array_value($s_menu, "name")] = $s_menu;
                    }
                }
            } else {
                $final_items_array[$main_menu_name] = $item;
            }
        }

        //add todo
        $final_items_array["todo"] = array("name" => "todo", "url" => "todo", "class" => "check-square");

        return $final_items_array;
    }

    private function _make_customized_sub_menu_for_help_and_support($key, $s_menu)
    {
        if ($key == 1) {
            $s_menu["name"] = "help_articles";
        } else if ($key == 2) {
            $s_menu["name"] = "help_categories";
        } else if ($key == 4) {
            $s_menu["name"] = "knowledge_base_articles";
        } else if ($key == 5) {
            $s_menu["name"] = "knowledge_base_categories";
        }

        return $s_menu;
    }

    private function _get_left_menu_from_setting_for_rander($is_preview = false, $type = "default")
    {

        $user_left_menu = get_setting("user_" . $this->ci->login_user->user_id . "_left_menu");

        $default_left_menu = ($type == "dealer_default" || $this->ci->login_user->user_type == "dealer") ? get_setting("default_dealer_left_menu") : get_setting("default_left_menu");

        $custom_left_menu = "";

        //for preview, show the edit type preview
        if ($is_preview) {
            $custom_left_menu = $default_left_menu; //default preview
            if ($type == "user") {
                $custom_left_menu = $user_left_menu ? $user_left_menu : $default_left_menu; //user level preview
            }
        } else {

            $custom_left_menu = $user_left_menu ? $user_left_menu : $default_left_menu; //page rander

        }

        return $custom_left_menu ? json_decode(json_encode(@unserialize($custom_left_menu)), true) : array();
    }

    private function _get_left_menu_from_setting($type)
    {
        if ($type == "client_default") {
            $default_left_menu = get_setting("default_client_left_menu");
        } else if ($type == "user") {
            $default_left_menu = get_setting("user_" . $this->ci->login_user->user_id . "_left_menu");
        } else {
            $default_left_menu = get_setting("default_left_menu");
        }

        return $default_left_menu ? json_decode(json_encode(@unserialize($default_left_menu)), true) : array();
    }

    public function _get_item_data($item, $is_default_item = false)
    {
        $name = get_array_value($item, "name");
        $url = get_array_value($item, "url");
        $is_sub_menu = get_array_value($item, "is_sub_menu");
        $open_in_new_tab = get_array_value($item, "open_in_new_tab");
        $icon = get_array_value($item, "icon");

        if ($name) {
            $sub_menu_class = "";
            $clickable_menu_class = "make-sub-menu";
            $clickable_icon = "<i data-feather='corner-right-down' class='icon-14'></i>";
            if ($is_sub_menu) {
                $sub_menu_class = "ml20";
                $clickable_menu_class = "make-root-menu";
                $clickable_icon = "<i data-feather='corner-up-left' class='icon-14'></i>";
            }

            $extra_attr = "";
            $edit_button = "";
            $name_lang = "";
            if ($is_default_item || !$url) {
                $name_lang = app_lang($name);
            } else {
                //custom menu item
                $extra_attr = "data-url='$url' data-icon='$icon' data-custom_menu_item_id='" . rand(2000, 400000000) . "' data-open_in_new_tab='$open_in_new_tab'";
                $name_lang = $name;
                $edit_button = modal_anchor(get_uri("left_menus/add_menu_item_modal_form"), "<i data-feather='edit' class='icon-14'></i> ", array("title" => app_lang('edit'), "class" => "custom-menu-edit-button", "data-post-title" => $name, "data-post-url" => $url, "data-post-is_sub_menu" => $is_sub_menu, "data-post-icon" => $icon, "data-post-open_in_new_tab" => $open_in_new_tab));
            }

            return "<div data-value='" . $name . "' $extra_attr class='left-menu-item mb5 widget clearfix p10 bg-white $sub_menu_class'>
                        <span class='float-start text-start'><i data-feather='move' class='icon-16 text-off mr5'></i> " . $name_lang . "</span>
                        <span class='float-end invisible'>
                            <span class='clickable $clickable_menu_class toggle-menu-icon' title='" . app_lang("make_previous_items_sub_menu") . "'>$clickable_icon</span>
                            $edit_button
                            <span class='clickable delete-left-menu-item' title=" . app_lang("delete") . "><i data-feather='x' class='icon-14 text-danger'></i></span>
                        </span>
                    </div>";
        }
    }

    function get_sortable_items($type = "default")
    {
        $items = "<div id='menu-item-list-2' class='js-left-menu-scrollbar add-column-drop text-center p15 menu-item-list sortable-items-container'>";

        $default_left_menu_items = $this->_get_left_menu_from_setting($type);
        if (count($default_left_menu_items)) {
            foreach ($default_left_menu_items as $item) {
                $items .= $this->_get_item_data($item);
            }
        } else {
            //if there has no item in the customization panel, show the default items
            $items_array = $this->_prepare_sidebar_menu_items($type, true);
            foreach ($items_array as $item) {
                $items .= $this->_get_item_data($item, true);
            }
        }

        $items .= "</div>";

        return $items;
    }

    function rander_left_menu($is_preview = false, $type = "default")
    {

        $final_left_menu_items = array();
        $custom_left_menu_items = $this->_get_left_menu_from_setting_for_rander($is_preview, $type);

        if ($custom_left_menu_items) {

            $left_menu_items = $this->_prepare_sidebar_menu_items($type);
            $last_final_menu_item = ""; //store the last menu item of final left menu to add submenu to this item

            foreach ($custom_left_menu_items as $custom_left_menu_item) {
                $item_value_array = $this->_get_item_array_value($custom_left_menu_item, $left_menu_items);
                $is_sub_menu = get_array_value($custom_left_menu_item, "is_sub_menu");

                if ($is_sub_menu) {
                    //this is a sub menu, move it to it's parent item
                    $final_left_menu_items[$last_final_menu_item]["submenu"][] = $item_value_array;
                } else {
                    $final_left_menu_items[] = $item_value_array;
                    $last_final_menu_item = end($final_left_menu_items);
                    $last_final_menu_item = key($final_left_menu_items);
                }
            }
        }


        if (count($final_left_menu_items)) {
            $view_data["sidebar_menu"] = $final_left_menu_items;
        } else {

            $view_data["sidebar_menu"] = $this->_get_sidebar_menu_items($type);
        }

        $view_data["is_preview"] = $is_preview;
        $view_data["login_user"] = $this->ci->login_user;

        return view("layout/sidebar", $view_data);
    }

    private function _get_item_array_value($data_array, $left_menu_items)
    {
        $name = get_array_value($data_array, "name");
        $url = get_array_value($data_array, "url");
        $icon = get_array_value($data_array, "icon");
        $open_in_new_tab = get_array_value($data_array, "open_in_new_tab");
        $item_value_array = array();

        if ($url) { //custom menu item
            $item_value_array = array("name" => $name, "url" => $url, "is_custom_menu_item" => true, "class" => "$icon", "open_in_new_tab" => $open_in_new_tab);
        } else if (array_key_exists($name, $left_menu_items)) { //default menu items
            $item_value_array = get_array_value($left_menu_items, $name);
        }

        return $item_value_array;
    }

    /**
     *  Function is used to load sidebar menus as assigned by admin
     * 
     * @param string $type
     * @return array
     */
    private function _get_sidebar_menu_items($type = "")
    {

        $dashboard_menu = ["name" => "dashboard", "url" => "dashboard", "class" => "uil-dashboard"];
        $sidebar_menu = ["dashboard" => $dashboard_menu];

        if ($this->ci->login_user) {
            if ($this->ci->login_user->access_right) {
                $sidebar_menu = $this->getMenusListByPermission($this->ci->login_user->access_right);
            }
            /////new/////
            if ($this->ci->login_user->is_admin && $this->ci->login_user->access_right == '') {
                $sidebar_menu = $this->getDefaultAdminMenus();
            }
        } else {
            $sidebar_menu = app_hooks()->apply_filters('app_filter_client_left_menu', $sidebar_menu);
        }

        return $this->position_items_for_default_left_menu($sidebar_menu);
    }

    //position items for plugins
    private function position_items_for_default_left_menu($sidebar_menu = array())
    {
        foreach ($sidebar_menu as $key => $menu) {
            $position = get_array_value($menu, "position");
            if ($position) {
                $position = $position - 1;
                $sidebar_menu = array_slice($sidebar_menu, 0, $position, true) +
                    array($key => $menu) +
                    array_slice($sidebar_menu, $position, NULL, true);
            }
        }

        return $sidebar_menu;
    }


    /**
     * GET sidebar menus list according to access permission
     */

    private function getMenusListByPermission($access = null)
    {
        $dashboard_menu = ["name" => "dashboard", "url" => "dashboard", "class" => "uil-dashboard"];
        $sidebar_menu = array("dashboard" => $dashboard_menu);
        $access =  json_decode($this->ci->login_user->access_right);
        $moduleObj = new Modules();
        $subModuleObj = new SubModules();
        foreach ($access as $key => $val) {
            if ($val->full_access) {
                $submenu = [];
                $module =  $moduleObj->where(['mod_status' => 1, 'mod_id' => $val->module_id])
                    ->first();
                $menuName = ["name" => $module['mod_name'], "url" => $module['mod_url'], "class" => $module['mod_class']];
                $subModule = $subModuleObj->where(['sm_status' => 1, 'sm_mod_id' => $val->module_id])
                    ->findAll();
                foreach ($subModule as $key => $sval) {
                    $menuItem = ["name" => $sval['sm_name'], "url" => $sval['sm_url'], "class" => $sval['sm_class']];
                    $submenu[] = $menuItem;
                }
                $menuName['submenu'] = $submenu;
                $sidebar_menu[$module['mod_name']] = $menuName;
            } else {
                $module =  $moduleObj->where(['mod_status' => 1, 'mod_id' => $val->module_id])
                    ->first();
                $menuName = ["name" => $module['mod_name'], "url" => $module['mod_url'], "class" => $module['mod_class']];
                if ($val->submodule) {
                    foreach ($val->submodule as $key => $sval) {
                        $menuItem = $subModuleObj->where(['sm_status' => 1, 'sm_mod_id' => $val->module_id, 'sm_id' => $sval->id])
                            ->first();
                        $menuItems = ["name" => $menuItem['sm_name'], "url" => $menuItem['sm_url'], "class" => $menuItem['sm_class']];
                        $submenu[] = $menuItems;
                    }
                    $menuName['submenu'] = $submenu;
                    $sidebar_menu[$module['mod_name']] = $menuName;
                }
            }
        }

        return $sidebar_menu;
    }

    /**
     *  Function is used to get list of all the defalt menus for admin.
     *
     * @return []
     */
    private function getDefaultAdminMenus()
    {
        $sidebar_menu = [];
        $dashboard_menu = ["name" => "dashboard", "url" => "dashboard", "class" => "uil-dashboard"];
        $sidebar_menu = ["dashboard" => $dashboard_menu];
        $moduleObj = new Modules();
        $modules = $moduleObj->findAll();

        foreach ($modules as $key => $module) {
            $subModule = $this->getAllSubModuleByModuleId($module['mod_id']);
            $menuName = ["name" => $module['mod_name'], "url" => $module['mod_url'], "class" => $module['mod_class'], 'submenu' => $subModule];
            $sidebar_menu[$module['mod_name']] = $menuName;
        }
        return $sidebar_menu;
    }

    /**
     * Function is used to load list of all the sub module of given module id.
     *
     * @param int $id
     * @return []
     */
    private  function getAllSubModuleByModuleId($id = null)
    {
        $submenu = [];
        $subModuleObj = new SubModules();
        $subModules = $subModuleObj->where(['sm_mod_id' => $id, 'sm_status' => true])->findAll();
        foreach ($subModules as $key => $sval) {
            $menuItem = ["name" => $sval['sm_name'], "url" => $sval['sm_url'], "class" => $sval['sm_class']];
            $submenu[] = $menuItem;
        }
        return $submenu;
    }
}
