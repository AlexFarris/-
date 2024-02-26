<?php
class News extends CI_Controller {

    public function index() {
        // Carica il modello delle notizie
        $this->load->model('news_model');
        
        // Ottieni tutte le notizie dal modello
        $data['news'] = $this->news_model->get_news();

        // Carica la vista con le notizie
        $this->load->view('news/index', $data);
    }

    public function create() {
        // Carica la vista del modulo di inserimento
        $this->load->view('news/create');
    }

    public function insert() {
        // Carica il modello delle notizie
        $this->load->model('news_model');

        // Inserisci la notizia nel database
        $this->news_model->insert_news();

        // Redirect alla pagina principale delle notizie
        redirect('news');
    }
}
?>
