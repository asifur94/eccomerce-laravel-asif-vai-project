<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ShopifyService
{
    protected $apiUrl;
    protected $accessToken;

    public function __construct()
    {
        $this->apiUrl = 'https://londontech-ca.myshopify.com/api/2024-01/graphql.json';
        $this->accessToken = 'ce87ecbec872fe1a2898ffa687e3df5b';
    }

    public function getProducts()
    {
        $query = <<<GRAPHQL
        {
          products(first: 250) {
            nodes {
              id
              title
              description
              images(first: 1) {
                nodes {
                  id
                  src
                  altText
                }
              }
              variants(first: 5) {
                nodes {
                  price {
                    amount
                    currencyCode
                  }
                }
              }
            }
          }
        }
        
    GRAPHQL;
        // Send request to Shopify API
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Shopify-Storefront-Access-Token' => $this->accessToken,
        ])->post($this->apiUrl, ['query' => $query]);

        // Handle the response
        if ($response->failed()) {
            return ['error' => 'Error fetching data from Shopify API'];
        }

        // Decode the JSON response
        $data = $response->json();
        
        // Return the data
        return $data;
    }
}
