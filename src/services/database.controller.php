<?php
include_once('database.service.php');
// controllers/UserController.php

class DatabaseController {
    private $userModel;

    public function __construct(DatabaseService $userModel) {
        $this->userModel = $userModel;
    }

    public function index() 
    {
        $users = $this->userModel->fetchUser();
        require 'views/user/index.php'; // Load the view
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

    public function show($id) {
        $user = $this->userModel->getUserById($id);
        if (!$user) {
            // Handle case when user is not found
            echo "User not found";
            return;
        }
        require 'views/user/show.php'; // Load the view
    }

    public function create() {
        // Display form for creating a new user
        require 'views/user/create.php'; // Load the view
    }

    public function store($name, $email) {
        // Validate input data
        if (empty($name) || empty($email)) {
            // Handle validation error
            echo "Name and email are required";
            return;
        }
        // Create new user in the database
        $result = $this->userModel->createUser($name, $email);
        if ($result) {
            // Redirect to user list or show success message
            echo "User created successfully";
        } else {
            // Handle error when user creation fails
            echo "Failed to create user";
        }
    }

    public function edit($id) {
        $user = $this->userModel->getUserById($id);
        if (!$user) {
            // Handle case when user is not found
            echo "User not found";
            return;
        }
        require 'views/user/edit.php'; // Load the view
    }

    public function update($id, $name, $email) {
        // Validate input data
        if (empty($name) || empty($email)) {
            // Handle validation error
            echo "Name and email are required";
            return;
        }
        // Update user in the database
        $result = $this->userModel->updateUser($id, $name, $email);
        if ($result) {
            // Redirect to user list or show success message
            echo "User updated successfully";
        } else {
            // Handle error when user update fails
            echo "Failed to update user";
        }
    }

    public function destroy($id) {
        // Delete user from the database
        $result = $this->userModel->deleteUser($id);
        if ($result) {
            // Redirect to user list or show success message
            echo "User deleted successfully";
        } else {
            // Handle error when user deletion fails
            echo "Failed to delete user";
        }
    }
}
