package core;

public class Car {

    private String type;
    private Integer age;

    public Car(String type, Integer age){
        this.type=type;
        this.age=age;
    }

    @Override
    public String toString() {
        return "Car{" +
                "type='" + type + '\'' +
                ", age=" + age +
                '}';
    }
}

