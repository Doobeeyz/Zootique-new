package com.example.zoo.models;

import jakarta.persistence.*;
import lombok.Data;
import org.springframework.web.bind.annotation.GetMapping;

import java.time.LocalDateTime;
import java.util.HashSet;
@Entity
@Table(name = "users")
@Data
public class User {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private Long id;
    @Column(name = "email", unique = true)
    private String email;
    @Column(name = "phoneNumber")
    private String phoneNumber;
    @Column(name = "name")
    private String name;
    @Column(name = "active")
    private boolean active;
//    @OneToOne(cascade = CascadeType.ALL, fetch = FetchType.EAGER);
//    private Image avatar;
    @Column(name = "password")
    private String password;
    @Column(name = "role")
    private Set<Role> roles = new HashSet<>();
    @Column(name = "dateOfCreated")
    private LocalDateTime dateOfCreated;
    @PrePersist
    private void init(){
        dateOfCreated = LocalDateTime.now();
    }
}
