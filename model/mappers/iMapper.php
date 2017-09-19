<?php

interface iMapper {
    public function create($Object);
    public function read($id);
    public function update($Object);
    public function delete($id);
}