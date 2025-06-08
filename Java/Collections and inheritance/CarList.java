package collection;
import core.Car;

public class CarList {

    private int current;
    private Car[] cars;

    public CarList(int size){
        cars = new Car[size];
    }

    public void addCar(Car type){
        try{
            cars[current] = type;
            current++;
        }
        catch(ArrayIndexOutOfBoundsException e){
            System.err.println("A lista megtelt. Nem lehet tobb autot hozzaadni." + e.getMessage());
        }
    }

    public CarIterator getCarIterator(){
        return new CarIterator();
    }

    public class CarIterator{

        private int index;

        public CarIterator(){
        }

        public boolean hasMoreElements(){
            return index < current;
        }

        public Car nextElement(){
            return cars[index++];
        }

    }

}
