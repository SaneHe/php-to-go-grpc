package logic

import (
	"context"

	"book/service/user/rpc/internal/svc"
	rpc "book/service/user/rpc/rpc"

	"github.com/tal-tech/go-zero/core/logx"
)

type LoginLogic struct {
	ctx    context.Context
	svcCtx *svc.ServiceContext
	logx.Logger
}

func NewLoginLogic(ctx context.Context, svcCtx *svc.ServiceContext) *LoginLogic {
	return &LoginLogic{
		ctx:    ctx,
		svcCtx: svcCtx,
		Logger: logx.WithContext(ctx),
	}
}

func (l *LoginLogic) Login(in *rpc.LoginRequest) (*rpc.LoginResponse, error) {
	// todo: add your logic here and delete this line

	return &rpc.LoginResponse{
		Name:   in.Name,
		Gender: in.Password,
	}, nil
}
