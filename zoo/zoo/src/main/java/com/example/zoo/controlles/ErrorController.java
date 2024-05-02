package com.example.zoo.controlles;

import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;

import java.nio.file.AccessDeniedException;

@ControllerAdvice
public class ErrorController {
    @ExceptionHandler(value = AccessDeniedException.class)
    public String handleAccessDenied() {
        return "403"; // Направляет пользователя на страницу 403.html
    }
}