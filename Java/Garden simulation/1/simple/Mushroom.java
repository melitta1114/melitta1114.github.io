package lab8.simple;
import lab8.Plant;

public class Mushroom implements Plant{
    public double getOxigenAmountPerYear(){
        return 7.3;
    };

    public int getLifeTime(){
        return 12;
    };

    public String getRepresentation() {
        return String.valueOf(getClass().getSimpleName().charAt(0));
    }
}
