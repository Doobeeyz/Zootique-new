package com.example.zoo.controllers;


import com.example.zoo.models.Product;
import com.example.zoo.services.ProductService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;
import java.util.List;

@Controller
@RequiredArgsConstructor
public class ProductController {
    private final ProductService productService;

    @GetMapping("/")
    public String vet(@RequestParam(name = "title", required = false) String title,
                      @RequestParam(name = "sortBy", required = false) String sortBy,
                      Model model) {
        model.addAttribute("products", productService.listProducts(title, sortBy));
        return "vet";
    }


    @GetMapping("/productsUser")
    public String products(@RequestParam(name = "title", required = false) String title,
                           @RequestParam(name = "sortBy", required = false) String sortBy,
                           Model model) {
        model.addAttribute("products", productService.listProducts(title, sortBy));
        if (sortBy != null && !sortBy.isEmpty()) {
            model.addAttribute("sortBy", sortBy);
        }
        return "productsUser";
    }



    @GetMapping("/bucket")
    public String bucket(@RequestParam(name = "title", required = false) String title, Model model) {
        model.addAttribute("products", productService.listProducts(title, null));
        return "bucket";
    }


    @GetMapping("/product/{id}")
    public String productInfo(@PathVariable Long id, Model model) {
        Product product = productService.getProductById(id);
        model.addAttribute("product", product);
        model.addAttribute("images", product.getImages());
        return "product";
    }

    @PostMapping("/product/create")
    public String createProduct(@RequestParam("file1") MultipartFile file1, @RequestParam("file2") MultipartFile file2,
                                @RequestParam("file3") MultipartFile file3, Product product) throws IOException {
        productService.saveProduct(product, file1, file2, file3);
        return "redirect:/";
    }

    @PostMapping("/product/delete/{id}")
    public String deleteProduct(@PathVariable Long id) {
        productService.deleteProduct(id);
        return "redirect:/";
    }
}
