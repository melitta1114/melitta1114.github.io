import java.util.*;


public class Main {

    public static void main(String[] args) {

        String fileName = "data.txt";

        // Using Java 7 Strategy
        Strategy java7Strategy = new Java7Strategy();
        List<Student> studentsJava7 = java7Strategy.processFile(fileName);
        java7Strategy.printStatistics(studentsJava7);

        System.out.println();

        // Using Java 8 Strategy
        Strategy java8Strategy = new Java8Strategy();
        List<Student> studentsJava8 = java8Strategy.processFile(fileName);
        java8Strategy.printStatistics(studentsJava8);
    }
}