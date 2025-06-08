import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.*;
import java.util.stream.Collectors;

public class Java8Strategy implements Strategy{
    public List<Student> processFile(String fileName) {

        List<Student> students = new ArrayList<>();
        try (BufferedReader br = new BufferedReader(new FileReader(fileName))) {
                    students = br.lines()
                    .map(line -> {
                        String[] parts = line.split(",");
                        String name = parts[0].trim();
                        String gender = parts[1].trim();
                        int[] grades = Arrays.stream(parts, 2, parts.length)
                                .mapToInt(Integer::parseInt)
                                .toArray();

                        return new Student(name, gender, grades);
                    })
                    .collect(Collectors.toList());

            return students;
        } catch (IOException e) {
            e.printStackTrace();
        }
        return students;
    }
    public void printStatistics(List<Student> students) {
        System.out.println("Mean grades per student:");
        students.forEach(student -> {
            double meanGrade = Arrays.stream(student.getGrades()).average().orElse(0.0);
            System.out.println(student.getName() + " : " + meanGrade);
        });

        double meanOfMeanGrades = students.stream()
                .mapToDouble(student -> Arrays.stream(student.getGrades()).average().orElse(0.0))
                .average()
                .orElse(0.0);

        double meanOfAllGrades = students.stream()
                .flatMapToInt(student -> Arrays.stream(student.getGrades()))
                .average()
                .orElse(0.0);

        System.out.println("Mean of mean grades: " + meanOfMeanGrades);
        System.out.println("Mean of all grades: " + meanOfAllGrades);

        Optional<Student> maleWithHighestMean = students.stream()
                .filter(student -> "male".equals(student.getGender()))
                .max(Comparator.comparingDouble(student ->
                        Arrays.stream(student.getGrades()).average().orElse(0.0)));

        Optional<Student> femaleWithHighestMean = students.stream()
                .filter(student -> "female".equals(student.getGender()))
                .max(Comparator.comparingDouble(student ->
                        Arrays.stream(student.getGrades()).average().orElse(0.0)));

        System.out.println("Male student with highest mean: " +
                (maleWithHighestMean.isPresent() ? maleWithHighestMean.get().getName() : "N/A"));

        System.out.println("Female student with highest mean: " +
                (femaleWithHighestMean.isPresent() ? femaleWithHighestMean.get().getName() : "N/A"));

        System.out.print("Student's first name that have a grade 10: ");
        students.stream()
                .filter(student -> Arrays.stream(student.getGrades()).anyMatch(grade -> grade == 10))
                .map(student -> student.getName().split(" ")[0])
                .distinct()
                .forEach(firstName -> System.out.print(firstName + ", "));
        System.out.println();
    }
}

