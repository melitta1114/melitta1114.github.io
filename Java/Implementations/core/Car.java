package core;

public class Car implements Vehicle{

    private String type;
    private int age;
    public void numberOfWheels(){
        System.out.println("Az autonak 4 kereke van.");
    }

    public Car(String type, int age){
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
