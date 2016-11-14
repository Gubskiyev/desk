<?php
class ModelAdvert extends Model {

    public function getAllAdverts() {
        return $this->select("SELECT * FROM `advert` ORDER BY `id`");
    }

}