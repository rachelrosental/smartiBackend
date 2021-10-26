<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ApiController extends Controller
{

    public function getAllBooks() {
        $books = Book::get()->toJson(JSON_PRETTY_PRINT);
        if($books)
        return response($books, 200);
        else return http_response_code(404);
    }

    public function createBook(Request $request) {
        $book = new Book;
        $book->name = $request->name;
        $book->AuthorName = $request->AuthorName;
        $book->price = $request->price;
        $book->save();

    return response()->json([
        "message" => "book record created"
    ], 201);
  }

    public function getBook($id) {
        if (Book::where('id', $id)->exists()) {
            $book = Book::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($book, 200);
          } else {
            return response()->json([
              "message" => "Book not found"
            ], 404);
          }
    }

    public function updateBook(Request $request, $id) {
        if (Book::where('id', $id)->exists()) {
            $book = Book::find($id);
            $book->name = is_null($request->name) ? $book->name : $request->name;
            $book->AuthorName = is_null($request->AuthorName) ? $book->AuthorName : $request->AuthorName;
            $book->price = is_null($request->price) ? $book->price : $request->price;
            $book->save();
    
            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Book not found"
            ], 404);
            
        }
    }

    public function deleteBook ($id) {
        if(Book::where('id', $id)->exists()) {
            $book = Book::find($id);
            $book->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Book not found"
            ], 404);
          }
    }
}
