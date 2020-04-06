<?php
namespace NPT\Controllers;

use AHT\View;
use NPT\Models\Product;

/**
 * Products controller
 *
 * PHP version 7.3.11
 */
class Products
{
    /**
     * Show the all products page
     *
     * @return void
     */
    public function all()
    {
        $data['products'] = Product::getAll();
        View::render('Products/all.php', $data);
    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function viewAdd()
    {
        View::render('Products/add.php');
    }

    /**
     * action add new product
     *
     * @return void
     */
    public function add()
    {
        if (isset($_POST['submit'])) {
            $newFileName = $_POST["image"];
            $newFileName = strtolower(str_replace(' ','-', $newFileName));

            $file = $_FILES['file'];

            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileTempName = $file['tmp_name'];
            $fileError = $file['error'];
            $fileSize = $file['size'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg', 'png', 'jpeg');

            if(in_array($fileActualExt, $allowed)){
                if($fileError==0){
                    if($fileSize<2000000){
                        $imgFullname = $newFileName.".".uniqid("",true).".".$fileActualExt;
                        $fileDestination = "Assets/Images/Products/".$imgFullname;
                        move_uploaded_file($fileTempName, $fileDestination);
                        $data = array(
                          'title' => $_POST['title'],
                          'description' => $_POST['description'],
                          'image' => $imgFullname,
                          'price' => $_POST['price'],
                          'product_type' => $_POST['product_type'],
                        );
                        Product::add($data);
                    }else{
                        echo 'Your image is too big!';
                        exit();
                    }
                }
                else{
                    echo 'you had an error!';
                    exit();
                }
            } else{
                echo 'you need to upload a proper file type!';
                exit();
            }
        }
        View::redirect('all');
    }

    /**
     * Show the detail page
     *
     * @return void
     */
    public function detail()
    {
        if (isset($_GET['id'])) {
            $data['product'] = Product::getById($_GET['id']);
            View::render('Products/detail.php',$data);
        } else {
            echo 'Page not found';
        }
    }

    /**
     * Show the edit page
     *
     * @return void
     */
    public function viewEdit()
    {
        if (isset($_GET['id'])) {
            $data['product'] = Product::getById($_GET['id']);
            View::render('Products/edit.php', $data);
        } else {
            echo 'Page not found';
        }
    }

    /**
     * action edit product
     *
     * @return void
     */
    public function edit()
    {
        if (isset($_GET['id'])) {
            if (isset($_POST['submit'])) {
                $data = array(
                    'id' => $_GET['id'],
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                    'price' => $_POST['price'],
                    'product_type' => $_POST['product_type'],
                );
                Product::edit($data);
                View::redirect('detail?id='.$_GET['id']);
            }
        } else {
            echo 'Page not found';
        }
    }

    /**
     * action delete product
     *
     * @return void
     */
    public function delete()
    {
        if (isset($_GET['id'])) {
            $data['products'] = Product::delete($_GET['id']);
            View::redirect('all');
        } else {
            echo 'Page not found';
        }
    }
}