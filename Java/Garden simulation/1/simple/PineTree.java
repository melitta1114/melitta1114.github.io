package lab8.simple;
import lab8.Plant;

public class PineTree implements Plant{
    public double getOxigenAmountPerYear(){
        return 9.5;
    };

    public int getLifeTime(){
        return 14;
    };

    public String getRepresentation() {
        return String.valueOf(getClass().getSimpleName().charAt(0));
    }
}
