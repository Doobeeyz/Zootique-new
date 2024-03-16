package com.example.zoo.services;

import com.example.zoo.models.Product;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;

@Service
public class ProductService {
    private List<Product> products = new ArrayList<>();
    private long id = 0;
    {
        products.add(new Product(++id,"Корм",10000,"Корм для собак",5));
        products.add(new Product(++id, "Корм",11000,"Корм для кошек",6));
    }
    public List<Product> listProducts(){
        return products;
    }
    public void saveProduct(Product product){
        product.setId(++id);
        products.add(product);
    }
    public void deleteProduct(Long id){
        products.removeIf(product -> product.getId()==id);
    }

}
