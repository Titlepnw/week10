package Week10;

public class ifElse_Compare2Number {
    public static void main(String[] args) {
        int number1 = 10, number2 = 33;
        if (number1 > number2) {
            System.out.println(number1 + "มากว่า" + number2);
        } else if (number1 < number2) {
            System.out.println(number1 + "น้อยกว่า" + number2);
        } else {
            System.out.println(number1 + "เท่ากับ" + number2);
        }
    }
}
