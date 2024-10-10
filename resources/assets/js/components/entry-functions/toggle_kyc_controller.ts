import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type toggleKycControllerArguments = {
    registrar_address: string;
    toggle_bool: boolean
};

export const toggleKycController = (args: toggleKycControllerArguments): InputTransactionData => {
  const { registrar_address, toggle_bool } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::toggle_kyc_controller`,
        typeArguments: [],
        functionArguments: [
            registrar_address,
            toggle_bool
        ],
    },
  };
};
