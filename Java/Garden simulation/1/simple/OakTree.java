package lab8.simple;
import lab8.Plant;

public class OakTree implements Plant{
    public double getOxigenAmountPerYear(){
        return 8.4;
    };

    public int getLifeTime(){
        return 13;
    };

    public String getRepresentation() {
        return String.valueOf(getClass().getSimpleName().charAt(0));
    }
}
