.. include:: ../../Includes.txt

==================================================
Feature: #70 - Add Products from Cart in List View
==================================================

See :issue:`70`

Description
===========

In some cases you don't need a detail page for the products and want to allow adding products to the shopping cart
in the list view.
Diese Änderung erlaubt es, der showForm Action das Produkt als Parameter mitzugeben.

Integration
===========

To display the form in list view, you have to insert the following snippet in your own template.

::

   <f:cObject typoscriptObjectPath="lib.cartProduct.showForm" data="{productUid: '{product.uid}'}"/>

.. index:: Frontend
