var commentsArray = [
  {
    id: 1,
    parent: null,
    created: "2015-01-01",
    modified: "2015-01-01",
    content:
      "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu.",
    attachments: [],
    pings: [],
    creator: 6,
    fullname: "Simon Powell",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: false,
    created_by_current_user: false,
    upvote_count: 3,
    user_has_upvoted: false,
    is_new: false,
  },
  {
    id: 2,
    parent: null,
    created: "2015-01-02",
    modified: "2015-01-02",
    content:
      "Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu.",
    attachments: [],
    pings: [],
    creator: 5,
    fullname: "Administrator",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: true,
    created_by_current_user: false,
    upvote_count: 2,
    user_has_upvoted: false,
    is_new: false,
  },
  {
    id: 3,
    parent: null,
    created: "2015-01-03",
    modified: "2015-01-03",
    content:
      "@Hank Smith sed posuere interdum sem.\nQuisque ligula eros ullamcorper https://www.google.com/ quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget #velit.",
    attachments: [],
    pings: {
      3: "Hank Smith",
    },
    creator: 1,
    fullname: "You",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: false,
    created_by_current_user: true,
    upvote_count: 2,
    user_has_upvoted: true,
    is_new: false,
  },
  {
    id: 4,
    parent: 3,
    created: "2015-01-04",
    modified: "2015-01-04",
    content: "",
    attachments: [
      {
        id: 1,
        file: "http://www.w3schools.com/html/mov_bbb.mp4",
        mime_type: "video/mp4",
      },
    ],
    creator: 4,
    fullname: "Todd Brown",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: false,
    created_by_current_user: false,
    upvote_count: 0,
    user_has_upvoted: false,
    is_new: true,
  },
  {
    id: 5,
    parent: 4,
    created: "2015-01-05",
    modified: "2015-01-05",
    content:
      "Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit.",
    attachments: [],
    pings: [],
    creator: 3,
    fullname: "Hank Smith",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: false,
    created_by_current_user: false,
    upvote_count: 0,
    user_has_upvoted: false,
    is_new: true,
  },
  {
    id: 6,
    parent: 1,
    created: "2015-01-06",
    modified: "2015-01-06",
    content:
      "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu.",
    attachments: [],
    pings: [],
    creator: 2,
    fullname: "Jack Hemsworth",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: false,
    created_by_current_user: false,
    upvote_count: 1,
    user_has_upvoted: false,
    is_new: false,
  },
  {
    id: 7,
    parent: 1,
    created: "2015-01-07",
    modified: "2015-01-07",
    content:
      "Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit.",
    attachments: [],
    pings: [],
    creator: 5,
    fullname: "Administrator",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: true,
    created_by_current_user: false,
    upvote_count: 0,
    user_has_upvoted: false,
    is_new: false,
  },
  {
    id: 8,
    parent: 6,
    created: "2015-01-08",
    modified: "2015-01-08",
    content:
      "Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu.",
    attachments: [],
    pings: [],
    creator: 1,
    fullname: "You",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: false,
    created_by_current_user: true,
    upvote_count: 0,
    user_has_upvoted: false,
    is_new: false,
  },
  {
    id: 9,
    parent: 8,
    created: "2015-01-09",
    modified: "2015-01-10",
    content:
      "Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit.",
    attachments: [],
    pings: [],
    creator: 7,
    fullname: "Bryan Connery",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: false,
    created_by_current_user: false,
    upvote_count: 0,
    user_has_upvoted: false,
    is_new: false,
  },
  {
    id: 10,
    parent: 9,
    created: "2015-01-10",
    modified: "2015-01-10",
    content:
      "Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit.",
    attachments: [
      {
        id: 2,
        file: "https://www.w3schools.com/images/w3schools_green.jpg",
        mime_type: "image/jpeg",
      },
    ],
    pings: [],
    creator: 1,
    fullname: "You",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
    created_by_admin: false,
    created_by_current_user: true,
    upvote_count: 0,
    user_has_upvoted: false,
    is_new: false,
  },
];

var usersArray = [
  {
    id: 1,
    fullname: "Current User",
    email: "current.user@viima.com",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
  },
  {
    id: 2,
    fullname: "Jack Hemsworth",
    email: "jack.hemsworth@viima.com",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
  },
  {
    id: 3,
    fullname: "Hank Smith",
    email: "hank.smith@viima.com",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
  },
  {
    id: 4,
    fullname: "Todd Brown",
    email: "todd.brown@viima.com",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
  },
  {
    id: 5,
    fullname: "Administrator",
    email: "administrator@viima.com",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
  },
  {
    id: 6,
    fullname: "Simon Powell",
    email: "simon.powell@viima.com",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
  },
  {
    id: 7,
    fullname: "Bryan Connery",
    email: "bryan.connery@viima.com",
    profile_picture_url:
      "https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png",
  },
];

////coment///
$("#comments-container").comments({
  // User
  profilePictureURL: "",
  currentUserIsAdmin: false,
  currentUserId: null,

  // Font awesome icon overrides
  spinnerIconURL: "",
  upvoteIconURL: "",
  replyIconURL: "",
  uploadIconURL: "",
  attachmentIconURL: "",
  fileIconURL: "",
  noCommentsIconURL: "",

  // Strings to be formatted (for example localization)
  textareaPlaceholderText: "Add a comment",
  newestText: "Newest",
  oldestText: "Oldest",
  popularText: "Popular",
  attachmentsText: "Attachments",
  sendText: "Send",
  replyText: "Reply",
  editText: "Edit",
  editedText: "Edited",
  youText: "You",
  saveText: "Save",
  deleteText: "Delete",
  newText: "New",
  viewAllRepliesText: "View all __replyCount__ replies",
  hideRepliesText: "Hide replies",
  noCommentsText: "No comments",
  noAttachmentsText: "No attachments",
  attachmentDropText: "Drop files here",
  textFormatter: function (text) {
    return text;
  },

  // Functionalities
  enableReplying: true,
  enableEditing: true,
  enableUpvoting: true,
  enableDeleting: true,
  enableAttachments: false,
  enableHashtags: false,
  enablePinging: false,
  enableDeletingCommentWithReplies: false,
  postCommentOnEnter: false,
  forceResponsive: false,
  readOnly: false,
  defaultNavigationSortKey: "newest",

  // Colors
  highlightColor: "#2793e6",
  deleteButtonColor: "#C9302C",

  scrollContainer: this.$el,
  roundProfilePictures: false,
  textareaRows: 2,
  textareaRowsOnFocus: 2,
  textareaMaxRows: 5,
  maxRepliesVisible: 2,

  fieldMappings: {
    id: "id",
    parent: "parent",
    created: "created",
    modified: "modified",
    content: "content",
    file: "file",
    fileURL: "file_url",
    fileMimeType: "file_mime_type",
    pings: "pings",
    creator: "creator",
    fullname: "fullname",
    profileURL: "profile_url",
    profilePictureURL: "profile_picture_url",
    isNew: "is_new",
    createdByAdmin: "created_by_admin",
    createdByCurrentUser: "created_by_current_user",
    upvoteCount: "upvote_count",
    userHasUpvoted: "user_has_upvoted",
  },
  getUsers: function (success, error) {
    success([]);
  },
  getComments: function (success, error) {
    success([]);
  },
  postComment: function (commentJSON, success, error) {
    success(commentJSON);
  },
  putComment: function (commentJSON, success, error) {
    success(commentJSON);
  },
  deleteComment: function (commentJSON, success, error) {
    success();
  },
  upvoteComment: function (commentJSON, success, error) {
    success(commentJSON);
  },
  hashtagClicked: function (hashtag) {},
  pingClicked: function (userId) {},
  uploadAttachments: function (commentArray, success, error) {
    success(commentArray);
  },
  refresh: function () {},
  timeFormatter: function (time) {
    return new Date(time).toLocaleDateString();
  },
});

// /liked/////
$(function () {
  $(".li1").click(function () {
    $(".li1,spn1").toggleClass("press", 1000);
  });
  $(".li2").click(function () {
    $(".li2,spn2").toggleClass("press", 1000);
  });
  $(".li3").click(function () {
    $(".li3,spn3").toggleClass("press", 1000);
  });
  $(".li4").click(function () {
    $(".li4,spn4").toggleClass("press", 1000);
  });
  $(".li5").click(function () {
    $(".li5,spn5").toggleClass("press", 1000);
  });
  $(".li6").click(function () {
    $(".li6,spn6").toggleClass("press", 1000);
  });
  $(".li7").click(function () {
    $(".li7,spn7").toggleClass("press", 1000);
  });
  $(".li8").click(function () {
    $(".li8,spn8").toggleClass("press", 1000);
  });
  $(".li9").click(function () {
    $(".li9,spn9").toggleClass("press", 1000);
  });
  $(".li10").click(function () {
    $(".li10,spn10").toggleClass("press", 1000);
  });
  $(".li11").click(function () {
    $(".li11,spn11").toggleClass("press", 1000);
  });
  $(".li12").click(function () {
    $(".li12,spn12").toggleClass("press", 1000);
  });
  $(".li13").click(function () {
    $(".li13,spn13").toggleClass("press", 1000);
  });
});
