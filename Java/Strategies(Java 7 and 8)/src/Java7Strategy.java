import java.io.*;
import java.util.ArrayList;
import java.util.HashSet;
import java.util.List;
import java.util.Set;

public class Java7Strategy implements Strategy{

    public List<Student> processFile(String fileName) {
        List<Student> students = new ArrayList<>();
        BufferedReader br = null;

        try {
            br = new BufferedReader(new FileReader(fileName));
            String line;

            while ((line = br.readLine()) != null) {
                String[] parts = line.split(",");
                String name = parts[0].trim();
                String gender = parts[1].trim();
                int[] grades = new int[parts.length - 2];

                for (int i = 2; i < parts.length; i++) {
                    grades[i - 2] = Integer.parseInt(parts[i].trim());
                }

                students.add(new Student(name, gender, grades));
            }

        } catch (IOException e) {
            e.printStackTrace();
        } finally {
            if (br != null) {
                try {
                    br.close();
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
        }

        return students;
    }

    public void printStatistics(List<Student> students) {
        System.out.println("Mean grades per student:");

        for (Student student : students) {
            int[] grades = student.getGrades();
            double meanGrade = calculateMean(grades);
            System.out.println(student.getName() + " : " + meanGrade);
        }

        double meanOfMeanGrades = calculateMeanOfMeanGrades(students);
        System.out.println("Mean of mean grades: " + meanOfMeanGrades);

        double meanOfAllGrades = calculateMeanOfAllGrades(students);
        System.out.println("Mean of all grades: " + meanOfAllGrades);

        Student maleWithHighestMean = findMaleWithHighestMean(students);
        System.out.println("Male student with highest mean: " +
                (maleWithHighestMean != null ? maleWithHighestMean.getName() : "N/A"));

        Student femaleWithHighestMean = findFemaleWithHighestMean(students);
        System.out.println("Female student with highest mean: " +
                (femaleWithHighestMean != null ? femaleWithHighestMean.getName() : "N/A"));

        Set<String> namesWithGrade10 = findNamesWithGrade10(students);
        System.out.print("Student's first name that have a grade 10: ");
        for (String name : namesWithGrade10) {
            System.out.print(name + ", ");
        }
        System.out.println();
    }

    private double calculateMean(int[] grades) {
        int sum = 0;
        for (int grade : grades) {
            sum += grade;
        }
        return grades.length > 0 ? (double) sum / grades.length : 0.0;
    }

    private double calculateMeanOfMeanGrades(List<Student> students) {
        double sumOfMeans = 0.0;
        for (Student student : students) {
            int[] grades = student.getGrades();
            sumOfMeans += calculateMean(grades);
        }
        return students.size() > 0 ? sumOfMeans / students.size() : 0.0;
    }

    private double calculateMeanOfAllGrades(List<Student> students) {
        int sum = 0;
        int count = 0;
        for (Student student : students) {
            int[] grades = student.getGrades();
            for (int grade : grades) {
                sum += grade;
                count++;
            }
        }
        return count > 0 ? (double) sum / count : 0.0;
    }

    private Student findMaleWithHighestMean(List<Student> students) {
        Student highestMeanStudent = null;
        double highestMean = Double.MIN_VALUE;

        for (Student student : students) {
            if ("male".equals(student.getGender())) {
                double meanGrade = calculateMean(student.getGrades());
                if (meanGrade > highestMean) {
                    highestMean = meanGrade;
                    highestMeanStudent = student;
                }
            }
        }

        return highestMeanStudent;
    }

    private Student findFemaleWithHighestMean(List<Student> students) {
        Student highestMeanStudent = null;
        double highestMean = Double.MIN_VALUE;

        for (Student student : students) {
            if ("female".equals(student.getGender())) {
                double meanGrade = calculateMean(student.getGrades());
                if (meanGrade > highestMean) {
                    highestMean = meanGrade;
                    highestMeanStudent = student;
                }
            }
        }

        return highestMeanStudent;
    }

    private Set<String> findNamesWithGrade10(List<Student> students) {
        Set<String> namesWithGrade10 = new HashSet<>();

        for (Student student : students) {
            int[] grades = student.getGrades();
            for (int grade : grades) {
                if (grade == 10) {
                    String firstName = student.getName().split(" ")[0];
                    namesWithGrade10.add(firstName);
                    break;  // Add the name only once for each student
                }
            }
        }

        return namesWithGrade10;
    }
}

