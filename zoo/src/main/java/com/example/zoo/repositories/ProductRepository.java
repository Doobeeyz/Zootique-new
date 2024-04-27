package com.example.zoo.repositories;

import org.springframework.data.jpa.repository.config.EnableJpaRepositories;
import org.springframework.stereotype.Repository;
import com.example.zoo.models.Product;
import org.springframework.data.jpa.repository.JpaRepository;
import java.util.List;
@EnableJpaRepositories(basePackages = "repositories")


@Repository
public interface ProductRepository extends JpaRepository<Product, Long> {
    List<Product> findByTitle(String title);

    List<Product> findByTitleContaining(String title);
}
