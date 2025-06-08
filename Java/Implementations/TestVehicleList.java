import collection.VehicleList;
import core.Car;
import core.Airplane;
import core.Vehicle;


public class TestVehicleList {

    public static void main(String[] args) {
        Car audi = new Car("Audi", 10);
        Car volvo = new Car("Volvo", 15);
        Car bmw = new Car("BMW", 11);
        Car ferrari = new Car("Ferrari", 16);

        Airplane wizzair = new Airplane("Wizzair", 20, 54);
        Airplane ryanair = new Airplane("Ryanair", 25, 56);
        Airplane aircanada = new Airplane("Air Canada", 30, 60);

        VehicleList newvehicles = new VehicleList(8);
        newvehicles.addVehicle(audi);
        newvehicles.addVehicle(volvo);
        newvehicles.addVehicle(bmw);
        newvehicles.addVehicle(ferrari);
        newvehicles.addVehicle(wizzair);
        newvehicles.addVehicle(ryanair);
        newvehicles.addVehicle(aircanada);

        Car info1 = new Car("Audi", 10);
        info1.numberOfWheels();

        Airplane info2 = new Airplane("Wizzair", 20, 54);
        info2.numberOfWheels();


        VehicleList.VehicleForwardIterator iterator1 = (VehicleList.VehicleForwardIterator) newvehicles.getForwardIterator();

        while (iterator1.hasMoreElements()) {
            Vehicle vehicle1 = iterator1.nextElement();
            System.out.println(vehicle1.toString());
        }


        VehicleList.VehicleBackwardIterator iterator2 = (VehicleList.VehicleBackwardIterator) newvehicles.getBackwardIterator();

        while (iterator2.hasMoreElements()) {
            Vehicle vehicle2 = iterator2.nextElement();
                System.out.println(vehicle2.toString());
        }
    }
}

