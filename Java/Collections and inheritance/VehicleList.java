package collection;
import core.Car;
import core.Vehicle;

public class VehicleList {

    private int current;
    private Vehicle[] vehicles;

    public VehicleList(int size) {
        vehicles = new Vehicle[size];
    }

    public void addVehicle(Vehicle type) {
        try {
            vehicles[current] = type;
            current++;
        } catch (IndexOutOfBoundsException e) {
            System.err.println("A tomb megtelt, nem adhtasz hozza uj elemet: " + e.getMessage());
        }

    }

    public VehicleIterator getForwardIterator() {
        return (VehicleIterator) new VehicleForwardIterator();
    }

    public VehicleIterator getBackwardIterator() {
        return (VehicleIterator) new VehicleBackwardIterator();
    }

    public class VehicleForwardIterator implements VehicleIterator {

        private int index;

        public VehicleForwardIterator() {
            index = 0;
        }

        public boolean hasMoreElements() {
            return index < current;
        }

        public Vehicle nextElement() {
            return vehicles[index++];
        }
    }

    public class VehicleBackwardIterator implements VehicleIterator {

        private int index;

        public VehicleBackwardIterator() {
            index = current - 1;
        }

        public boolean hasMoreElements() {
            return index >= 0;
        }

        public Vehicle nextElement() {
            try{
                return vehicles[index--];
            } catch(IndexOutOfBoundsException e){
                System.err.println("Hiba: " + e.getMessage());
            }
            return null;
        }
    }
}




