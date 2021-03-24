import java.util.Scanner;

public class HW2_2 {

    public static void showArray(int[] array)
    {
        for(int i = 0; i < array.length; i++)
        {
            System.out.print(array[i]+ " ");
        }

    }
    public  static  int[]  createArray(){
        Scanner scanner = new Scanner(System.in);

        System.out.println("Podaj dlugoosc tablicy");
        int size = scanner.nextInt();
        int[] array = new int[size];

        for(int i = 0; i < size; i++)
        {
            System.out.println("Podaj element tablicy");
            array[i] = scanner.nextInt();
        }
        return array;
    }
    public static void main(String[] args) {

        int[] firstArray = createArray();
        int[] secondArray = createArray();
        int[] finalArray = new int[firstArray.length];

        if(firstArray.length != secondArray.length)
        {
            System.out.println("error");
        }
        else
        {
            for(int i = 0; i < firstArray.length; i++)
            {
                finalArray[i] = firstArray[i] + secondArray[i];
            }
            System.out.println("Wynik dodawania tablic : ");
            showArray(finalArray);

        }
    }
}
