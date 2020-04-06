<?php
namespace NPT\Models;

use AHT\Model;

/**
 * Product model
 *
 * PHP version 7.3.11
 */
class Product extends Model
{
    /**
     * Get all the products as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $conn = static::getDB();
        $sql = "SELECT * FROM products;";
        $result = mysqli_query($conn, $sql);
        $products = array();
        $k=0;
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $products[$k] = $row;
                $k++;
            }
        }
        return $products;
    }

    /**
     * Get a product by id
     *
     * @param int $id  id of product
     *
     * @return array
     */
    public static function getById($id)
    {
        $conn = static::getDB();
        $sql = "SELECT * FROM products WHERE id=".$id.";";
        $result = mysqli_query($conn, $sql);
        $product = $result->fetch_assoc();
        return $product;
    }

    /**
     * insert a new product
     *
     * @param array $data
     *
     * @return void
     */
    public static function add($data = [])
    {
        $conn = static::getDB();
        $title = $data['title'];
        $image = $data['image'];
        $price = $data['price'];
        $description = $data['description'];
        $product_type = $data['product_type'];

        $sql = "INSERT INTO products (title, image, price,description, product_type) 
                    VALUES  ('$title', '$image', '$price', '$description',
                    '$product_type');";
        mysqli_query($conn, $sql);
    }

    /**
     * update a product by id
     *
     * @param array $data
     *
     * @return void
     */
    public static function edit($data = [])
    {
        $conn = static::getDB();
        $id = $data['id'];
        $title = $data['title'];
        $price = $data['price'];
        $description = $data['description'];
        $product_type = $data['product_type'];

        $sql = "UPDATE products SET  title = '$title', price = '$price',      
                    description = '$description', product_type = '$product_type' WHERE id = '$id';";
        mysqli_query($conn, $sql);
    }

    /**
     * delete a product by id
     *
     * @param int $id id of product
     *
     * @return void
     */
    public static function delete($id)
    {
        $conn = static::getDB();

        $sql = "DELETE FROM products WHERE id = '$id';";
        mysqli_query($conn, $sql);
    }
}