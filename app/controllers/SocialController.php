<?php
class SocialController extends BaseController {

    public function index() {
        return View::make('social.index');
    }

    public function likes($proyectoId) {
        $model = Proyecto::find($proyectoId);
        if (!$model) {
            return [
                'status'=> 404,
                'message'=> 'proyecto no encontrado'
            ];
        }

        $list = Like::whereRaw("state='LIKE' and proyecto_id=?",[$proyectoId])->get();
        return [
            'status'=>200,
            'data' => [
                'likes'=>count($list)
            ]
        ];
    }

    public function dislikes($proyectoId) {
        $model = Proyecto::find($proyectoId);
        if (!$model) {
            return [
                'status'=> 404,
                'message'=> 'proyecto no encontrado'
            ];
        }

        $list = Like::whereRaw("state='DISLIKE' and proyecto_id=?",[$proyectoId])->get();
        return [
            'status'=>200,
            'data' => [
                'dislikes'=>count($list)
            ]
        ];
    }

    public function comments($proyectoId) {
        $model = Proyecto::find($proyectoId);
        if (!$model) {
            return [
                'status'=> 404,
                'message'=> 'proyecto no encontrado'
            ];
        }

        $list = Comment::whereRaw("proyecto_id=?",[intval($proyectoId)])->get();
        // return [
        //     'status'=>200,
        //     'data' => $list
        // ];
        return $list;
    }

    public function doLike($proyectoId) {
        $model = Proyecto::find($proyectoId);
        if (!$model) {
            return [
                'status'=> 404,
                'message'=> 'proyecto no encontrado'
            ];
        }
        $like = new Like();
        $like->proyecto_id = $proyectoId;
        $like->state = 'LIKE';
        $like->user_id = Auth::user()->id;
        $like->save();

        return [
            'id'=>$like->id,
            'proyectoId'=>intval($proyectoId),
            'state'=>'LIKE'
        ];
    }

    public function doDisLike($proyectoId) {
        $model = Proyecto::find($proyectoId);
        if (!$model) {
            return [
                'status'=> 404,
                'message'=> 'proyecto no encontrado'
            ];
        }
        $like = new Like();
        $like->proyecto_id = $proyectoId;
        $like->state = 'DISLIKE';
        $like->user_id = Auth::user()->id;
        $like->save();

        return [
            'status'=> 200,
            'id'=>$like->id,
            'proyectoId'=>intval($proyectoId),
            'state'=>'LIKE'
        ];
    }

    public function doComment($proyectoId) {
        $model = Proyecto::find($proyectoId);
        if (!$model) {
            return [
                'status'=> 404,
                'message'=> 'proyecto no encontrado'
            ];
        }
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->proyecto_id = $proyectoId;
        $comment->content = Input::get('contenido');
        $comment->save();

        return [
            'status'=> 200,
            'id'=>$comment->id,
            'proyectoId'=>intval($proyectoId),
            'state'=>'LIKE'
        ];
    }
}
