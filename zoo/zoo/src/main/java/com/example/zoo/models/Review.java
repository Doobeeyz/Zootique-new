package com.example.zoo.models;

import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name = "Reviews")
@Data
public class Review {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private long idReviews;
    @Column(name = "id_user")
    private long id_user;
    @Column(name = "id_product")
    private long id_product;
    @Column(name = "comment")
    private String comment;
}
