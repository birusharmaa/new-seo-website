<?php
namespace App\Models;

use CodeIgniter\Model;


class Manage_model extends Model
{   
 
    function __construct()
    {        
        $this->table_pages = 'seo_pages';  
        $this->seo_slider_section = 'seo_slider_section';
        $this->table_slider = 'seo_slider'; 
        $this->custom_section = 'seo_custom_section'; 
        $this->services = 'seo_service';          
    }
    
    function get_servicesID($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_menus');
        $builder->select('id');
        $builder->where(['menu_name' => 'Services', 'created_by'=> $id]);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow('id');
        } else {
            return $this->db->error();
        } 
    }

    function get_ProductID($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_menus');
        $builder->select('id');
        $builder->where(['menu_name' => 'Products', 'created_by'=> $id]);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow('id');
        } else {
            return $this->db->error();
        } 
    }
    

    function get_menu_pages($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_menus');
        $builder->select('seo_menus.id as menu_id, seo_menus.menu_name');   
        $builder->where(['seo_menus.sub_menu'=> 0, 'seo_menus.footer_menu' => 0, 'seo_menus.created_by' => $id]);
        $builder->orderBy('seo_menus.id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    } 

    function get_all_pages($id){
 
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_menus');
        $builder->select('seo_menus.id as menu_id, seo_menus.menu_name, seo_service.service, seo_service.id as service_id, seo_products.product_name,seo_products.id as product_id');   
        $builder->join('seo_service', 'seo_menus.id = seo_service.menu_id','LEFT');  
        $builder->join('seo_products', ' seo_menus.id = seo_products.menu_id','LEFT'); 
        $builder->where(['seo_menus.sub_menu'=> 0, 'seo_menus.footer_menu' => 0, 'seo_menus.created_by' => $id]);
        $builder->orderBy('seo_menus.id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    } 

    function add_slider($data){     
        $db      = \Config\Database::connect();
        $builder = $db->table($this->seo_slider_section );     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }    
    }

    function get_all_sliders($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->seo_slider_section);     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }    

    function save_slider($data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table_slider);     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }    
    }

    function all_slider($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table_slider);     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function getImageName($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_gallery');     
        $builder->select('image');
        $builder->where(['id'=> $id ]);
        $res =  $builder->get();  
        if ($res) {
            $name = $res->getRowArray();
            return $name['image'];
        } else {
            return $this->db->error();
        } 
    }

    function edit_slider($user_id, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table_slider);
        $builder->where(['id' => $id, 'created_by'=> $user_id]);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }
    
    function update_image_gallery($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_gallery');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function update_slider($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table_slider);
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_slider($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table_slider);  
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function delete_slider_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->seo_slider_section);  
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function edit_slider_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->seo_slider_section);
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_slider_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->seo_slider_section);
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function save_custom_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->custom_section);     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }    
    }

    function get_all_custom_section($id){       
        $db      = \Config\Database::connect();
        $builder = $db->table($this->custom_section); 
        $builder->select('seo_custom_section.*, seo_pages.page_title');    
        $builder->join('seo_pages', 'seo_custom_section.page_id = seo_pages.id','left'); 
        $builder->orderBy('id','ASC');
        $res =  $builder->get(); 
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function edit_custom_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->custom_section);
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function delete_custom_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->custom_section);  
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function update_custom_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->custom_section);
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function allslider_custom($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->custom_section);     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function all_services($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->services);     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_services($data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->services);     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_services($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->services);
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_services( $id,$data){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->services);
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_services($id){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->services);  
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function save_services_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_services_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function all_services_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_services_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function edit_services_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_services_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_services_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_services_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_services_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_services_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function all_Products($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_products($data){
      
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products');       
        $res =  $builder->insert($data);       
        if ($res) {
            return true;
        } else {
            return "0";
        }  
    }

    function delete_products($id){
        try{
            $db      = \Config\Database::connect();
            $builder = $db->table('seo_products');
            $builder->select('main_image, banner');            
            $builder->where(['id'=> $id ]);
            $res =  $builder->get();  
            $data = $res->getRowArray();

            $builder = $db->table('seo_products');
            $builder->where('id', $id);
            $res =  $builder->delete();  
            if($res) {
                // if(!empty($data['main_image'])){    
                //     $path = "uploads/product_images/".$data['main_image'];
                //     if(file_exists($path)){
                //         unlink($path);
                //     }
                // }

                // if(!empty($data['banner'])){    
                //     $path = "uploads/product_banners/".$data['banner'];
                //     if(file_exists($path)){
                //         unlink($path);
                //     }
                // }
                return true;
            } else {
                return $this->db->error();
            } 
        
        } catch (\Exception $e) {
            log_message('error',json_encode($e));
        }
    }

    function edit_products($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_products($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function all_products_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_product_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function delete_product_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function edit_product_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_product_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function all_tags_keywords($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_meta_data');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_keywords($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_meta_data');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function delete_keywords($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_meta_data');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }      
    }

    function all_posts($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_posts');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_posts($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_posts');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_posts($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_posts');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_posts($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_posts');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_posts($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_posts');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }   
    
    function custom_insert($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_custom_insert');
        $builder->where('created_by', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function save_custom($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_custom_insert');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function update_custom($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_custom_insert');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function save_galleryimages($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_gallery');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function images_gallery($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_gallery');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function delete_galleryimages($id){
        $db      = \Config\Database::connect();

        $builder = $db->table('seo_images_gallery');

        $builder->select('image');            
        $builder->where(['id'=> $id ]);
        $res =  $builder->get();  
        $data = $res->getRowArray();
            
        $builder = $db->table('seo_images_gallery');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            if(!empty($data['image'])){    
                $path = "uploads/gallery_images/".$data['image'];
                if(file_exists($path)){
                    unlink($path);
                }
            }
            return true;
        } else {
            return $this->db->error();
        } 
    }   

    function save_galleryvideo($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_videos_gallery');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function video_gallery($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_videos_gallery');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function delete_galleryvideo($id){  
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_videos_gallery');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }   

    function testimonials($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonial');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_testimonials($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonial');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_images_gallery($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_gallery');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRowArray();
        } else {
            return $this->db->error();
        } 
    }  

    function edit_testimonials($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonial');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }  

    
    
    function update_testimonials($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonial');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }
    
    function delete_testimonials($id){  
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonial');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }  

    function faqs($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_faqs($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }
    
    function edit_faqs($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }  
    
    function update_faqs($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }
    
    function delete_faqs($id){  
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }  

    function images_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_image_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_image_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_image_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_image_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_images_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function video_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_video_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_video_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_video_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function delete_video_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_video_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function edit_video_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_video_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_video_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_video_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function banner_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_banner'); 
        $builder->select('*');            
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_banner_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_banner');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_banner_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_banner');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_banner_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_banner');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }
    
    function delete_banner_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_banner');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function testimonials_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonials_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_testimonials_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonials_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_testimonials_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonials_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_testimonials_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonials_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_testimonials_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_testimonials_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function save_faqs_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function faqs_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function edit_faqs_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_faqs_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_faqs_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_faqs_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function save_post_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_post_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }     
    
    function delete_post_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_post_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function post_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_post_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function mlc($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_mcl');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function mlc_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_mlc_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_mlc_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_mlc_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }  

    function delete_mlc_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_mlc_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function edit_mlc_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_mlc_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function edit_post_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_post_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_post_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_post_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function update_mlc_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_mlc_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function business_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_query_section');     
        $builder->where(['created_by'=> $id ]);
        $builder->orderBy('id','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }

    function save_business_section($data){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_query_section');     
        $res =  $builder->insert($data);
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }  
    }

    function edit_business_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_query_section');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow();
        } else {
            return $this->db->error();
        } 
    }

    function update_business_section($data, $id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_query_section');
        $builder->set($data);
        $builder->where('id', $id);
        $res =  $builder->update();
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_business_section($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_query_section');
        $builder->where('id', $id);
        $res =  $builder->delete();  
        if ($res) {
            return true;
        } else {
            return $this->db->error();
        } 
    }

    function get_menuName($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_menus');
        $builder->select('menu_name');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow('menu_name');
        } else {
            return $this->db->error();
        } 
    }

    function get_serviceName($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_service');
        $builder->select('service');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow('service');
        } else {
            return $this->db->error();
        } 
    }

    function get_productName($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_products');
        $builder->select('product_name');
        $builder->where('id', $id);
        $res =  $builder->get();  
        if ($res) {
            return $res->getRow('product_name');
        } else {
            return $this->db->error();
        } 
    }

    function get_arranged_section($menuid, $submenu_id,$user_id){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_arrange_section');   
        $builder->select('title,section_id,menu_id,submenu_id,section_title');  
        $builder->where(['created_by'=> $user_id,'menu_id' => $menuid, 'submenu_id'=> $submenu_id]);
        $builder->orderBy('soroting_order','ASC');
        $res =  $builder->get();  
        if ($res) {
            return $res->getResult();
        } else {
            return $this->db->error();
        } 
    }
}
