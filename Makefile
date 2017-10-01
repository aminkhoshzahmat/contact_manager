# =================================
# Variables                       #
# =================================
CG=\033[0;36m#..........green color
CP=\033[0;35m#...........pink color
CF=\033[0;33m#...........pink color
NC=\033[0m#................no color
SPRINT=1.0.0#..............Version
FEATURES=4#......scenarios to test
#==================================
# Start                           #
#==================================

help:
	@echo '_______ ___ ______ ____  /___  /__  /____(_)_______ ______ _'
	@echo '__  __ `__ \_  __ `/__  / __  / _  __/__  / __  __ \_  __ `/'
	@echo '_  / / / / // /_/ / _  /  _  /  / /_  _  /  _  / / // /_/ /'
	@echo '/_/ /_/ /_/ \__,_/  /_/   /_/   \__/  /_/   /_/ /_/ \__,_/'
	@echo ""
	@printf "${CG}Welcome to malltina cli	V${SPRINT}${NC}"
	@echo ""
	@echo "--------------------------------------------"
	@echo "In order to work with cli"
	@echo "type the command name provided in below list"
	@printf "${CF}for example : ${NC}make export"
	@echo ""
	@echo "--------------------------------------------"
	@echo ""
	@echo ""
	@printf "${CP}Commands (${FEATURES}) ${NC} "
	@echo ""
	@echo "-----------------------------------------------------------------"
	@echo "|  #  | Commands | Operation Details                            |"
	@echo "-----------------------------------------------------------------"
	@echo "|  1  | export   | Export Database                              |"
	@echo "|  2  | import   | Import Database                              |"
	@echo "|  3  | phpunit  | Test project with phpunit                    |"
	@echo "|  4  | phpspec  | Run the php spec                             |"
	@echo "-----------------------------------------------------------------"

export:
	clear
	./bin/db_export.sh
import:
	clear
	./bin/db_import.sh
phpunit:
	clear
	./bin/phpunit
phpspec:
	clear
	./bin/phpspec
