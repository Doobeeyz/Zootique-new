package com.example.zoo.controlles;

import org.springframework.ui.Model;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class MainController {
    @RequestMapping("/hello")
    public String getHelloPage(Model model){
        model.addAttribute("name","Anzhelika");
        return "hello.html";
    }

    
}
