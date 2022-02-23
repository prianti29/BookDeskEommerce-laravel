<?php

namespace App\Interfaces;

interface IProductRepository extends IBaseRepository
{
    public function CreateProduct($request);
    public function GetMensProductsList();
    public function GetWomensProductList();
    public function GetBegProductList();
    public function GetFootwareProductList();

}
