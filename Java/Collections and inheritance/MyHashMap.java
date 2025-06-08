package collection;

import core.Car;

public class MyHashMap {

    private Entry[] entries;

    public MyHashMap(Integer size) {
        this.entries = new Entry[size];
    }

    public void put(Integer key, Car car) {
        if (key < 1000 || key > 9999) {
            System.out.println("Hibás alvázszám, a következő autó nem lesz hozzáadva listához: " + car);
            return;
        }

        int szamlalo = hashFunction(key);
        Entry jelenlegi = entries[szamlalo];

        while (jelenlegi != null) {
            if (jelenlegi.getKey().equals(key)) {
                System.out.println("A kulcs már létezik: " + key + " a következő autó nem lesz hozzáadva listához: " + car);
                return;
            }
            jelenlegi = jelenlegi.getNext();
        }

        Entry ujentries = new Entry(key, car, entries[szamlalo]);
        entries[szamlalo] = ujentries;
    }


    public Car get(Integer key) {
        if (key < 1000 || key > 9999) {
            return null;
        }

        int szamlalo = hashFunction(key);

        Entry jelenlegi = entries[szamlalo];
        while (jelenlegi != null) {
            if (jelenlegi.getKey().equals(key)) {
                return jelenlegi.getValue();
            }
            jelenlegi = jelenlegi.getNext();
        }

        return null;
    }

    public boolean containsKey(Integer key) {
        return get(key) != null;
    }

    private int hashFunction(Integer key) {
        return key % entries.length;
    }
}

