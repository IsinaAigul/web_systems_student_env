<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 26.11.2014
 * Time: 13:25
 */
Class Supplier{

    private $current_data_worker = null;
    private $current_data_storage = null;
    private $current_id = null;

    private function loginTest(){//проверка на залогинивание персонажа
        foreach($_COOKIE as $value){
            if(!is_null($value)){//если в куках есть идентификатор сессии
                return true;//вернуть true
            }
        }
        return false;//иначе false
    }


    public function __construct(){
        if($this->loginTest()){
            session_start();
            $this->current_id = $_SESSION['id'];
        }
        else{
            return;
        }

    }

	public function ChangeTour($value){//изменение тура
        $this->current_data_worker =  new StaffModel();
        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок
  <table border="black">
            <tr><th>Item</th><th>Due Date</th></tr>
            require_once("Includes/db.php");
            $wisherID = WishDB::getInstance()->get_wisher_id_by_name($_SESSION["user"]);
            $result = WishDB::getInstance()->get_wishes_by_wisher_id($wisherID);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td>" . htmlentities($row["description"]) . "</td>";
                echo "<td>" . htmlentities($row["due_date"]) . "</td></tr>\n";
            }
            mysqli_free_result($result);
            ?>
            <td>
                <form name="editWish" action="editWish.php" method="GET">
                    <input type="hidden" name="wishID" value="<?php echo $wishID; ?>">
                    <input type="submit" name="editWish" value="Edit">
                    </form>
            </td>
        </table>
        $this->current_data_worker->killTicket($ticket['id']);

    }


/*     public function ticketsConstruct(){//действие после авторизации/вызов демонстрации всех тикетов
        $id = $this->current_id;
        $this->current_data_worker = new StaffModel();

        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок

        $this->current_data_worker->getAllPersonalScore($id);
        $this->current_data_worker->getAllPersonalTikcets($id);

        $personalScore = $this->current_data_storage->getPersonalScore();
        $personalTickets =$this->current_data_storage->getAllPersonalTikets();
        $viewer = new StaffViewer();
        $viewer->showPersonalData($personalScore);
        $viewer->showAllTickets($personalTickets);
    } */

    private function showTour($value){//вызов демонстрации ипостроения сообщений
        $this->current_data_worker =  new StaffModel();
        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок

        $this->current_data_worker->getAllPersonalTikcets($this->current_id);

        $ticket=$this->current_data_storage->getPersonalTiket($value);

        $this->current_data_worker->getPersonalMessegesBetween($ticket['id'],'1000-01-01','3000-01-01');

        $personalMesseges['Request'] = $this->current_data_storage->getFromPersonalMessege();

        $personalMesseges['Respond'] = $this->current_data_storage->getToPersonalMessege();



        $viewer = new StaffViewer();
        $viewer->showAllMesseges($personalMesseges);
    }

    private function newTour($value){//создание новой записи
        $this->current_data_worker =  new StaffModel();
        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок

        $this->current_data_worker->getAllPersonalTikcets($this->current_id);
        $ticket=$this->current_data_storage->getPersonalTiket($value);

        session_start();
        $_SESSION['ticket_id'] = $ticket['id'];

        $viewer = new StaffViewer();
        $viewer->showWriteFormMessege();
    }

    public function ticketChoose(){//обработка нажатия на кнопку
        $temp = $_POST;
        foreach($temp as $index => $value ){
            switch($index){
                case "showMyTour":{
                    $this->showTour($value);
                }break;
                case "newTour":{
                    $this->newTour($value);
                }break;
                case "ChangeTour":{
                    $this->ChangeTour($value);
                }break;
            }
        }
    }





}