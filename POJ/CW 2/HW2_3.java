import java.util.Scanner;

public class HW2_3 {
    public static int[][] createMatrix()
    {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Tworzenie macierzy o wymiarac 3x3");
        int matrixSize = 3;

        int[][] matrix = new int[3][3];

        for( int i = 0; i < 9; i++)
        {
            if(i < 3)
            {
                System.out.println("Podaj element macierzy");
                matrix[0][i] = scanner.nextInt();
            }
            if((i >= 3) && (i < 6))
            {
                int j = i - matrixSize;
                System.out.println("Podaj element macierzy");
                matrix[1][j] = scanner.nextInt();
            }
            if (i >= 6 )
            {
                int k = i - (2 * matrixSize);
                System.out.println("Poadj element macierzy");
                matrix[2][k] = scanner.nextInt();
            }
        }
        return matrix;
    }
    public static void showMatrix(int[][] matrix)
    {
        System.out.println("twoja macierz");
        for(int i = 0; i < matrix.length; i++)
        {
            for ( int j = 0; j < matrix.length; j++)
            {
                System.out.print(matrix[i][j]);
                if(j == 2)
                {
                    System.out.println();
                }
            }
        }
    }

    public static void main(String[] args) {
        int[][] firstMatrix = createMatrix();
        int[][] secondMatrix = createMatrix();
        int[][] finalMatrix = new int[3][3];

        showMatrix(firstMatrix);
        showMatrix(secondMatrix);

        for (int i =0; i < finalMatrix.length; i++)
        {
            finalMatrix[0][i] = firstMatrix[0][i] + secondMatrix[0][i];
            finalMatrix[1][i] = firstMatrix[1][i] + secondMatrix[1][i];
            finalMatrix[2][i] = firstMatrix[2][i] + secondMatrix[2][i];
        }
        System.out.print("Po dodaniu to ");
        showMatrix(finalMatrix);
    }
}
