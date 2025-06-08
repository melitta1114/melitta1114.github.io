import collection.CarList;
import core.Car;

public class TestCarList {

    public static void main(String[] args) {

        Car Porsche = new Car("Cayenne", 8, 260);
        Car Wolksvagen = new Car("Golf 6", 3, 240);
        Car Audi = new Car("A6", 14, 250);

        CarList newcars = new CarList(3);
            newcars.addCar(Porsche);
            newcars.addCar(Wolksvagen);
            newcars.addCar(Audi);

        CarList.CarIterator iterator = newcars.getCarIterator();
        while (iterator.hasMoreElements()) {
            Car car = iterator.nextElement();
            System.out.println("Autok: " + car);
        }

    }
}
