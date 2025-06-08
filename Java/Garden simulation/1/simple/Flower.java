package lab8.simple;

import lab8.Plant;

public class Flower implements Plant {


    public double getOxigenAmountPerYear(){
        return 5.1;
    };

    public int getLifeTime(){
        return 10;
    };

    public String getRepresentation() {
        return String.valueOf(getClass().getSimpleName().charAt(0));
    }
    // a String.valueOf() azert kell, mert a getRepresentation() konstruktor String erteket terit vissza
    //maskepp a getSimpleName().CharAt(0) char erteket terit vissza es hibat dob
    //a getSimpleName() az osztaly nevet adja vissza Stringkent
    // a charAt(0) az osztaly neveben a nulladik elemet, az elso betut jeloli

}
