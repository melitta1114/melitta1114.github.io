package core;

public class Airplane implements Vehicle{

    private String type;
    private int age;
    private float lenght;
    public void numberOfWheels(){
        System.out.println("A repulogepnek 2 kereke van.");
    }

    public Airplane(String type, int age, float lenght){
        this.type=type;
        this.age=age;
        this.lenght=lenght;

    }

    @Override
    public String toString() {
        return "Airplane{" +
                "type='" + type + '\'' +
                ", age=" + age +
                ", lenght=" + lenght +
                '}';
    }
}
