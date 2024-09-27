<?php

namespace App\Swagger;

/**
 * @OA\Info(
 *     title="Laravel Swagger API",
 *     version="1.0.0",
 *     description="API documentation for Laravel Swagger",
 *     @OA\Contact(
 *         email="support@example.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000/api",
 *     description="Local development server"
 * )
 *
 * @OA\Tag(
 *     name="Products",
 *     description="Operations related to products"
 * )
 *
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     title="Product",
 *     description="Product model",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID of the product"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name of the product"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Description of the product"
 *     ),
 *     @OA\Property(
 *         property="price",
 *         type="number",
 *         format="float",
 *         description="Price of the product"
 *     ),
 * )
* @OA\Get(
*     path="/products",
*     tags={"Products"},
*     summary="Get list of products",
*     description="Returns list of products",
*     @OA\Response(
*         response=200,
*         description="successful operation",
*         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Product"))
*     )
* )
* @OA\Post(
*     path="/products",
*     tags={"Products"},
*     summary="Create a new product",
*     description="Adds a new product",
*     @OA\RequestBody(
*         required=true,
*         @OA\JsonContent(ref="#/components/schemas/Product")
*     ),
*     @OA\Response(
*         response=201,
*         description="Product Created"
*     )
* )
 * @OA\Get(
 *     path="/products/{id}",
 *     operationId="getProductById",
 *     tags={"Products"},
 *     summary="Get a product by ID",
 *     description="Returns a single product by its ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the product to fetch",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful response",
 *         @OA\JsonContent(ref="#/components/schemas/Product")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Product not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Product not found")
 *         )
 *     ),
 * )
* @OA\Put(
*     path="/products/{id}",
*     operationId="updateProduct",
*     tags={"Products"},
*     summary="Update a product by ID",
*     description="Updates a product's details by its ID",
*     @OA\Parameter(
*         name="id",
*         in="path",
*         required=true,
*         description="ID of the product to update",
*         @OA\Schema(type="integer")
*     ),
*     @OA\RequestBody(
*         required=true,
*         @OA\JsonContent(
*             required={"name", "description", "price"},
*             @OA\Property(property="name", type="string", example="Updated Product Name"),
*             @OA\Property(property="description", type="string", example="Updated description of the product"),
*             @OA\Property(property="price", type="number", format="float", example=99.99)
*         )
*     ),
*     @OA\Response(
*         response=200,
*         description="Product successfully updated",
*         @OA\JsonContent(ref="#/components/schemas/Product")
*     ),
*     @OA\Response(
*         response=404,
*         description="Product not found",
*         @OA\JsonContent(
*             @OA\Property(property="message", type="string", example="Product not found")
*         )
*     ),
* )
 * @OA\Delete(
 *     path="/products/{id}",
 *     operationId="deleteProduct",
 *     tags={"Products"},
 *     summary="Delete a product by ID",
 *     description="Deletes a product by its ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the product to delete",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Product deleted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Product deleted successfully")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Product not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Product not found")
 *         )
 *     )
 * )
 */


class ProductSwagger
{
    // This class is used only for Swagger annotations
}