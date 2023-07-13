<?php
    public class Factura{
        public int Numero { get; set; }
        public DateTime Fecha { get; set; }
        public string Cliente { get; set; }
        public int Total { get; set; }

        public function __construct()
        {
            Numero = numero;
            Fecha = fecha;
            Cliente = cliente;
            Total = total;
        }

    public void Imprimir()
        {
            Console.WriteLine($"Factura #{Numero}");
            Console.WriteLine($"Fecha: {Fecha}");
            Console.WriteLine($"Cliente: {Cliente}");
            Console.WriteLine($"Total: {Total:C}");
        }
    }
?>

