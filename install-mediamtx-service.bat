@echo off
echo Installing MediaMTX as Windows Service...
echo.

REM Check if running as admin
net session >nul 2>&1
if %errorLevel% NEQ 0 (
    echo ERROR: Please run this script as Administrator!
    pause
    exit /b 1
)

REM Stop and remove old service if exists
sc stop MediaMTX 2>nul
sc delete MediaMTX 2>nul

REM Create Windows Service with NSSM (you need to download NSSM first)
REM Download from: https://nssm.cc/download

echo.
echo Option 1: Using sc command (simple, but no auto-restart)
echo ---------------------------------------------------------
sc create MediaMTX binPath="C:\mediamtx\mediamtx.exe C:\mediamtx\mediamtx.yml" start=auto
sc description MediaMTX "MediaMTX Media Server for UserVault Streaming"
sc start MediaMTX

echo.
echo MediaMTX Service installed successfully!
echo.
echo To check status: sc query MediaMTX
echo To start:        sc start MediaMTX
echo To stop:         sc stop MediaMTX
echo To remove:       sc delete MediaMTX
echo.
pause
