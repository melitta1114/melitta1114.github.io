public class Student {

    private String name;
    private String gender;
    private int[] grades;

    public String getName() {
        return name;
    }

    public String getGender() {
        return gender;
    }

    public int[] getGrades() {
        return grades;
    }

    public Student(String name, String gender, int[] grades){
        this.name = name;
        this.gender = gender;
        this.grades=grades;

    }
}
