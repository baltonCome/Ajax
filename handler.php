<?php

require __DIR__.'/util/view/app.php';
use \Src\Entity\Car;

if(isset($_POST['action'])){

    switch ($_POST['action']) {
        case 'save':
            if(isset($_POST['brand'], $_POST['model'])){
                $car = new Car();
                $car -> brand = $_POST['brand'];
                $car -> model = $_POST['model'];

                $car->save();
                echo json_encode('Saved');
            }
            break;
        case 'search':
            if(isset($_POST['keyword'])){

                $car = Car::getCars($_POST['keyword']);
                $result ='';
                foreach($car as $c){
                    $result.=
                        '<tr>
                            <td>'. $c->id. '</td>
                            <td>'. $c->brand. '</td>
                            <td>'. $c->model. '</td>
                            <td>
                                <button class="btn btn-secondary btn-sm edit" id="'.$c->id.'" name="edit"> Edit </button>
                                <button class="btn btn-danger btn-sm delete" id="'.$c->id.'"name="delete">Delete</button>
                            </td>
                        </tr>';
                }
                $result = strlen($result) ? $result: '<tr> <td colspan= "6" class = "text-center"> EMPTY </td> </tr>';
                echo json_encode($result);
            }
            break;
        case 'update':
            $car = Car::getCarById($_POST['id']);
            if(isset($_POST['brand'], $_POST['model'])){
                $car -> brand = $_POST['brand'];
                $car -> model = $_POST['model'];

                $car->edit();
                echo json_encode('Updated');
            }
            break;
        case 'find':
            $car = Car::getCarById($_POST['id']);
            echo json_encode($car);
            break;
        case 'delete':
            $car = Car::getCarById($_POST['id']);
            $car->remove();
            echo json_encode('Deleted');
            break;
        default:
            $car = Car::getCars();
            $result ='';
            foreach($car as $c){
                $result.=
                    '<tr>
                        <td>'. $c->id. '</td>
                        <td>'. $c->brand. '</td>
                        <td>'. $c->model. '</td>
                        <td>
                            <button class="btn btn-secondary btn-sm edit" id="'.$c->id.'" name="edit"> Edit </button>
                            <button class="btn btn-danger btn-sm delete" id="'.$c->id.'"name="delete">Delete</button>
                        </td>
                    </tr>';
            }
            $result = strlen($result) ? $result: '<tr> <td colspan= "6" class = "text-center"> EMPTY </td> </tr>';
            echo json_encode($result);
            break;
    }
}