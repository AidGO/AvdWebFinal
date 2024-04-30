<?php
include_once('database.service.php');

class DatabaseController {
    private $userModel;

    public function __construct(DatabaseService $userModel) {
        $this->userModel = $userModel;
    }

    public function indexPage(string $pageName) 
    {
        $data = $this->userModel->fetchSpecificPageInfo($pageName);
        include_once(APP_ROOT . '/src/views/headview.php');
        foreach($data as $article)
        {
            include(APP_ROOT . '/src/views/mainview.php');
        }
    }

    public function fetchAll()
    {
        $pageQuery = $this->userModel->fetchPageInfo();
        return $pageQuery;
    }

    public function insertImage(string $imagePath, $imageWidth, $imageHeight)
    {
        $width = $imageWidth;
        $height = $imageHeight;
        $path = $imagePath;
        include(APP_ROOT . '/src/views/imageviewer.php');
    }

    public function createInfo(string $page, string $title, string $content, string $languages, string $link) : void
    {
        if (strlen($link) == 0)
        {
            $newlink = null;
            $this->userModel->createRecord($page, $title, $content, $languages, $newlink);
        }
        else
        {
            $this->userModel->createRecord($page, $title, $content, $languages, $link);
        }
    }

    public function validateLogin(string $name, string $password) : bool
    {
        $userInfo = $this->userModel->fetchUser();
        if ($userInfo[0]['username'] == $name && $userInfo[0]['pass'] == $password)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getArticleByID($id)
    {
        return $this->userModel->fetchID($id);
    }

    public function updateInfo($id, $page, $title, $content, $languages, $link) : void
    {
        if (strlen($link) == 0)
        {
            $newlink = null;
            $this->userModel->updateRecord($id, $page, $title, $content, $languages, $newlink);
        }
        else
        {
            $this->userModel->updateRecord($id, $page, $title, $content, $languages, $link);
        }
    }

    public function deleteInfo($id) : void
    {
        $this->userModel->deleteRecord($id);
    }
}