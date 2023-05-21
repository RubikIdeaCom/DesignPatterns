<?php

require 'FormElement.php';
require 'Input.php';
require 'FieldComposite.php';
require 'Fieldset.php';

require 'Form.php';


/**
 * The client code gets a convenient interface for building complex tree
 * structures.
 */
function getCourseForm(): FormElement
{
    $form = new Form('course', "Add course", "/course/add");
    $form->add(new Input('name', "Name", 'text'));
    $form->add(new Input('description', "Description", 'text'));

    $picture = new Fieldset('photo', "Course Logo");
    $picture->add(new Input('caption', "Caption", 'text'));
    $picture->add(new Input('image', "Image", 'file'));
    $form->add($picture);

    return $form;
}

/**
 * The form structure can be filled with data from various sources. The Client
 * doesn't have to traverse through all form fields to assign data to various
 * fields since the form itself can handle that.
 */
function loadCourseData(FormElement $form)
{
    $data = [
        'name' => 'PHP Course',
        'description' => 'PHP for Dummies',
        'photo' => [
            'caption' => 'Course Logo',
        ],
    ];

    $form->setData($data);
}

/**
 * The client code can work with form elements using the interface.
 * This way, it doesn't matter whether the client works with a simple component
 * or a complex composite tree.
 */
function renderCourse(FormElement $form)
{
    // ..

    echo $form->render();

    // ..
}

$form = getCourseForm();
loadCourseData($form);
renderCourse($form);