<?php
class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Booking_model');
        $this->load->library('barcode');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('landing_page');
    }

    public function booking()
    {
        $this->load->view('booking');
    }

    public function submit_booking()
    {
        $id_tiket = $this->generate_ticket_id();
        $data = array(
            'id_tiket' => $id_tiket,
            'location' => $this->input->post('location'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'guests' => $this->input->post('guests')
        );

        $this->Booking_model->insert_booking($data);

        redirect('landing/barcode/' . $id_tiket);
    }

    private function generate_ticket_id()
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $id_tiket = '';
        for ($i = 0; $i < 8; $i++) {
            $id_tiket .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $id_tiket;
    }

    public function barcode($id_tiket)
    {
        if (strlen($id_tiket) !== 8) {
            show_error('Invalid ticket ID', 400);
            return;
        }

        $booking_data = $this->Booking_model->get_booking_by_id($id_tiket);
        if (!$booking_data) {
            show_error('Ticket not found', 404);
            return;
        }

        $data['booking'] = $booking_data;
        $data['qrcode'] = $this->barcode->generate(json_encode($booking_data));
        $this->load->view('barcode', $data);
    }

    public function saveBarcode($code = '123456789')
    {
        $this->load->library('barcode');

        // Save barcode as PNG
        $path = FCPATH . 'assets/barcode_' . $code . '.png';
        $this->barcode->savePNG($code, $path);

        echo "Barcode saved at " . $path;
    }

    public function view_booking_details($encoded_data)
    {
        $booking_data = json_decode(urldecode($encoded_data));
        $this->load->view('booking_details', ['booking' => $booking_data]);
    }
}