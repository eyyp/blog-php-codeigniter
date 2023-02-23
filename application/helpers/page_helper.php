<?php 
    function Page($page)
    {
        switch ($page) {
            case "head":
                $head = "Blog/include/head";
                return $head;
                break;
            case "header":
                $header = "Blog/include/header";
                return $header;
                break;
            case "blogContents":
                $blogContents = "Blog/include/blogContents";
                return $blogContents;
                break;
            case "category":
                $Category = "Blog/include/Category";
                return $Category;
                break; 
            case "chosecloor":
                $chosecloor = "Blog/include/chosecloor";
                return $chosecloor;
                break;
            case "config":
                $config = "Blog/include/config";
                return $config;
                break;
            case "footer":
                $footer = "Blog/include/footer";
                return $footer;
                break;        
            case "found":
                $footer = "Blog/include/found";
                return $footer;
                break;
            case "javascriptadd":
                $footer = "Blog/include/javascriptadd";
                return $footer;
                break;
            case "msg":
                $msg = "Blog/include/msg";
                return $msg;
                break;           
            case "pagination":
                $pagination = "Blog/include/pagination";
                return $pagination;
                break;
            case "post":
                $post = "Blog/include/post";
                return $post;
                break; 
            case "postPreview":
                $postPreview = "Blog/include/postPreview";
                return $postPreview;
                break;            
            case "preview":
                $preview = "Blog/include/preview";
                return $preview;
                break;  
            case "recommendation":
                $recommendsecond = "Blog/include/recommendsecond";
                return $recommendsecond;
                break;
            case "contactPanel":
                $contactPanel = "Blog/include/contactPanel";
                return $contactPanel;
                break;
            case "contactMessage":
                $contactMessage = "Blog/include/contactMessage";
                return $contactMessage;
                break;  
            case "advertisement":
                $advertisement = "Blog/include/advertisement";
                return $advertisement;
                break;                                                              
            }
    }

    function PageAdmin($page)
    {   
        switch ($page) 
        {
            case "approachBar":
                $approachBar = "Admin/include/approachBar";
                return $approachBar;
                break;
            case "colorBar":
                $colorBar = "Admin/include/colorBar";
                return $colorBar;
                break;
            case "earningsOverview":
                $earningsOverview = "Admin/include/earningsOverview";
                return $earningsOverview;
                break;
            case "earningsRow":
                $earningsRow = "Admin/include/earningsRow";
                return $earningsRow;
                break; 
            case "footer":
                $footer = "Admin/include/footer";
                return $footer;
                break;
            case "head":
                $header = "Admin/include/head";
                return $header;
                break;
            case "illustrationsBar":
                $IllustrationsBar = "Admin/include/illustrationsBar";
                return $IllustrationsBar;
                break;        
            case "leftBar":
                $leftBar = "Admin/include/leftBar";
                return $leftBar;
                break;
            case "logoutBar":
                $logoutBar = "Admin/include/logoutBar";
                return $logoutBar;
                break;
            case "pageHeading":
                $pageHeading = "Admin/include/pageHeading";
                return $pageHeading;
                break;           
            case "projectBar":
                $projectBar = "Admin/include/projectBar";
                return $projectBar;
                break;
            case "revenueSources":
                $revenueSources = "Admin/include/revenueSources";
                return $revenueSources;
                break; 
            case "scriptsAdd":
                $scriptsAdd = "Admin/include/scriptsAdd";
                return $scriptsAdd;
                break;            
            case "topBar":
                $topBar = "Admin/include/topBar";
                return $topBar;
                break;                                                                
            case "tablePosts":
                $table = "Admin/include/tablePosts";
                return $table;
                break;
            case "tableCategorys":
                $table = "Admin/include/tableCategorys";
                return $table;
                break;    
            case "scrollButton":
                $scroll = "Admin/include/scrollButton";
                return $scroll;
                break;
            case "formAddPosts":
                $addposts = "Admin/include/formAddPosts";
                return $addposts;
                break;
            case "formEditPosts":
                $editposts = "Admin/include/formEditPosts";
                return $editposts;
                break;
            case "formNavbar":
                $navbar = "Admin/include/formNavbar";
                return $navbar;
                break;
            case "formCategorysAdd":
                $navbar = "Admin/include/formCategorysAdd";
                return $navbar;
                break;    
            case "settingsBar":
                $settings = "Admin/include/settingsBar";
                return $settings;
                break;
            case "monthly":
                $montly = "Admin/include/monthly";
                return $montly;
                break;
            case "annual":
                $annual = "Admin/include/annual";
                return $annual;
                break;
            case "task":
                $task = "Admin/include/task";
                return $task;
                break;
            case "pending":
                $peding = "Admin/include/pending";
                return $peding;
                break;
            case "topSourceBar":
                $peding = "Admin/include/source";
                return $peding;
                break; 
            case "messagesBar":
                $peding = "Admin/include/messagesBar";
                return $peding;
                break;
            case "dropdownMessages":
                $peding = "Admin/include/dropdownMessages";
                return $peding;
                break;                                                                                              
        }
    }
?>