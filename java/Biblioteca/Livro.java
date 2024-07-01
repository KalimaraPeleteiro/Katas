import java.util.UUID;

public class Livro {
        
        private String titulo;
        private String autor;
        private int numPaginas;
        private int id;

        public Livro(String titulo, String autor, int numPaginas) {
                this.titulo = titulo;
                this.autor = autor;
                this.numPaginas = numPaginas;
                this.id = Math.abs(UUID.randomUUID().hashCode());
        }

        public void descricaoLivro() {
                System.out.println("Livro " + this.titulo);
                System.out.println("Escrito por: " + this.autor);
                System.out.println("Com " + this.numPaginas + " páginas.");
                System.out.println("ID: " + this.id);
        }
}
