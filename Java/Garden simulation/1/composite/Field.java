package lab8.composite;
import lab8.Plant;
import java.util.HashSet;

public class Field implements Plant{

     private HashSet<Plant> set = new HashSet<>();

    public void add(Plant plant){ //hozzaadjuk az uj ertekeket a set-hez
        set.add(plant);
    };

    public void remove(Plant plant){ //tudunk elemeket torolni
        set.remove(plant);
    };

    public double getOxigenAmountPerYear(){
        double totalOxigen = 0.0; //inicializaljuk a lokalis valtozot amibe taroljuk az oxigentartalmak osszeget
        for (Plant plant : set) { //iteralunk a set osszes elemen
            totalOxigen += plant.getOxigenAmountPerYear(); //osszeadjuk az oxigentartalmakat
        }
        return totalOxigen; //visszateriti az osszesitett oxigentartalmat
    };

    public int getLifeTime(){
        int maxLifeTime = 0; //lokalis valtozo amiben taroljuk a maximumot
        for (Plant plant : set) { // iteralunk
            maxLifeTime = Math.max(maxLifeTime, plant.getLifeTime()); //keressuk a maximumot, ha kapunk egy nagyobbat csereljuk
        }
        return maxLifeTime;
    };

    public String getRepresentation(){
        StringBuilder representation = new StringBuilder("["); //segit a szovegmanipulacioban
        for (Plant plant : set) { //iteralunk
            representation.append(plant.getRepresentation()).append(", ");
            // a representationhoz fuzzuk az osszes noveny reprezentaciojat
        }
        if (!set.isEmpty()) { //a set nem ures
            representation.delete(representation.length() - 2, representation.length());
            //toroljuk a representation vegerol a vesszo szokoz parost, mert nem adunk hozza tobb elemet
        }
        representation.append("]"); //hozzaadjuk a ] es lezarjuk a set-et
        return representation.toString(); //stringe alakitjuk
    };
}
