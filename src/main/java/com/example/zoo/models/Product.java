package com.example.zoo.models;

import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name = "Product")
@Data
public class Product {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private long id;
    @Column(name = "name")
    private String name;
    @Column(name = "price")
    private int price;
    @Column(name = "description")
    private String description;
    @Column(name = "quantity")
    private int quantity;


    public Product() {
    }

    public Product(Long id, String name, int price, String description, int quantity) {
        this.id = id;
        this.name = name;
        this.description = description;
        this.price = price;
        this.quantity = quantity;
    }

    public String getTitle() {
        return this.name;
    }

    public String getDescription() {
        return this.description;
    }

    public int getPrice() {
        return this.price;
    }

    public void setTitle(String title) {
        this.name = title;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setPrice(int price) {
        this.price = price;
    }



    public String toString() {
        return "Product(name=" + this.getName() + ", description=" + this.getDescription() + ", price=" + this.getPrice()  + ")";
    }

    public long getId() {
        return this.id;
    }

    public void setId(Long id) {
        this.id = id;
    }
}
