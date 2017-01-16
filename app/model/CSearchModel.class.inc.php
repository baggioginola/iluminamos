<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 15/ene/2017
 * Time: 19:05
 */
require_once CLASSES . 'CDatabase.class.inc.php';

class SearchModel extends Database
{
    private static $object = null;
    private static $products_table = 'productos';

    /**
     * @return null|SearchModel
     */
    public static function singleton()
    {
        if (is_null(self::$object)) {
            self::$object = new self();
        }
        return self::$object;
    }

    /**
     * @return array|bool
     */
    public function getProducts($category = null, $brand = null, $price = null)
    {
        if (!$this->connect()) {
            return false;
        }

        $filter = '';

        if (!is_null($category)) {
            $filter .= " AND " . self::$products_table . ".id_categoria = " . $category;
        }

        if (!is_null($brand)) {
            $filter .= " AND " . self::$products_table . ".id_marca = " . $brand;
        }

        $result_array = array();

        $query = "SELECT " . self::$products_table . ".id_producto, " . self::$products_table . ".nombre,
        " . self::$products_table . ".id_categoria, " . self::$products_table . ".id_marca, precio 
        FROM " . self::$products_table . " INNER JOIN categorias
        ON " . self::$products_table . ".id_categoria = categorias.id_categoria 
        INNER JOIN marcas
        ON " . self::$products_table . ".id_marca = marcas.id_marca
        WHERE  1 = 1 " . $filter . " 
        AND " . self::$products_table . ".status = true 
        AND categorias.status = true and marcas.status = true LIMIT 10";

        if (!$result = $this->query($query)) {
            return false;
        }

        while ($row = $this->fetch_assoc($result)) {
            $result_array[] = $row;
        }

        return $result_array;
    }
}